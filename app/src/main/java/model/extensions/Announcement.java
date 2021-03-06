package model.extensions;

import model.model.Lecturer;
import org.apache.commons.lang3.StringUtils;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;
import java.util.Optional;

import static cache.CacheProvider.getCacheProvider;

/**
 * Implementation for Announcement.
 *
 * @author created: Michał Musiałowicz on 12.12.2021
 * @author last changed:
 */

@Entity
@Table( name = "komunikaty" )
public class Announcement implements AnnouncementIf
{
    @Id
    @Column( name = "id_komunikatu" )
    private int id;

    @Column( name = "id_prowadzacego" )
    private int lecturerId;

    @Column( name = "tresc" )
    private String details;

    @Column( name = "tytul" )
    private String title;

    public Announcement( int aId, int aLecturerId, String aTitle, String aDetails )
    {
        id = aId;
        lecturerId = aLecturerId;
        details = aDetails;
        title = aTitle;
    }

    /**
     * Default no-arg constructor for Hibernate ORM.
     */
    public Announcement()
    {

    }

    @Override
    public int getLecturerId()
    {
        return lecturerId;
    }

    @Override
    public String getDetails()
    {
        return details;
    }

    @Override
    public String getTitle()
    {
        return title;
    }

    @Override
    public int getId()
    {
        return id;
    }

    @Override
    public void setId( int aId )
    {
        id = aId;
    }

    @Override
    public void setLecturerId( int aLecturerId )
    {
        lecturerId = aLecturerId;
    }

    @Override
    public void setDetails( String aDetails )
    {
        details = aDetails;
    }

    @Override
    public void setTitle( String aTitle )
    {
        title = aTitle;
    }

    @Override
    public String getLecturerFirstName()
    {
        try
        {
            Optional< Lecturer > lecturer = Optional.of( getCacheProvider().getLecturers().get( lecturerId ) );
            if ( lecturer.isPresent() )
            {
                return lecturer.get().getFirstName();
            }
            return StringUtils.EMPTY;
        }
        catch ( Exception e )
        {
            return StringUtils.EMPTY;
        }
    }

    @Override
    public String getLecturerLastName()
    {
        try
        {
            Optional< Lecturer > lecturer = Optional.of( getCacheProvider().getLecturers().get( lecturerId ) );
            if ( lecturer.isPresent() )
            {
                return lecturer.get().getLastName();
            }
            return StringUtils.EMPTY;
        }
        catch ( Exception e )
        {
            return StringUtils.EMPTY;
        }
    }

    @Override
    public String getLecturerTitle()
    {
        try
        {
            Optional< Lecturer > lecturer = Optional.of( getCacheProvider().getLecturers().get( lecturerId ) );
            if ( lecturer.isPresent() )
            {
                return lecturer.get().getAcademicTitle();
            }
            return StringUtils.EMPTY;
        }
        catch ( Exception e )
        {
            return StringUtils.EMPTY;
        }
    }

    /**
     * We consider Announcements to be the same when they have the same fields (id excluded).
     */
    @Override
    public boolean equals( Object obj )
    {
        if ( this == obj )
        {
            return true;
        }

        if( !( obj instanceof AnnouncementIf) )
        {
            return false;
        }

        AnnouncementIf comparedAnnouncement = (AnnouncementIf) obj;
        if( comparedAnnouncement.getTitle().equalsIgnoreCase( this.getTitle() )
                && comparedAnnouncement.getDetails().equalsIgnoreCase( this.getDetails() )
                && comparedAnnouncement.getLecturerId() == this.getLecturerId()
        )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    @Override
    public int hashCode()
    {
        return 13 * getTitle().toLowerCase().hashCode() + 23 * getDetails().toLowerCase().hashCode() +
                41 * getLecturerId();
    }


}
